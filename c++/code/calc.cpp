#include <iostream>
#include <vector>
#include <cstdio>
#include <cstring>
#include <cstdlib>
#include <cmath>
#include <map>
#include "CSV.h"
using namespace std;

vector<string> date;
const int NID = 10;

vector< vector<string> > Pos;
vector< vector<string> > Neg;
string cinema_name[] = {"","Magic Castle Cinema","Cinema Magic stone","Magic Cinema Los Angeles","Jerry's Magic Motel","The Line Magic","Magic Sunset Boulevard Cinema","Cinema Magic stone","The Surrey Magic","The Mark Magic","the Quin Magic"};
struct node{
    int income;
    double profit_rate;
    double attendance;
    node() {}
    node(int a, double b, double c) {
        income = a;
        profit_rate = b;
        attendance = c;
    }
};

map<string, node> M;

string get_key(int x, int y, int z) {
    char t[20];
    sprintf(t, "%02d%d%d", x, y, z);
    return string(t);
}

void insert(int id, int year, int quarter, node B) {
    M[get_key(id, year, quarter)] = B;
}

node& get_node(int id, int year, int quarter) {
    return M[get_key(id, year, quarter)];
}

double delta(node &A, node &B) {
    return (A.income - B.income + 0.) / B.income;
}

void print1(FILE*out, int income, double d) {
    char tmp[10];
    if (d > 0)
        sprintf(tmp, "+%.1f%%", d);
    else
        sprintf(tmp, "%.1f%%", d);
    fprintf(out, "<td>%d(", income);
    if (d >= 10) {
        fprintf(out,"<span style=\"color:red;\">%s</span>", tmp);
    } else
    if (d <= -10) {
        fprintf(out,"<span style=\"color:blue;\">%s</span>", tmp);
    } else {
        fprintf(out,"%s", tmp);
    }
    fprintf(out,")</p></td>");
}

void income(string filename) {
    FILE *out = fopen(filename.c_str(),"w");
    vector<int> Good, Bad;
    fprintf(out, "<tbody>");
    for (int i = 1; i <= NID; i++) {
        fprintf(out,"<tr>\n<th>%d</th>\n", i);
        double t_a = 0, t_b = 0, t_c = 0, d;
        char ch;
        for (int q = 1; q <= 4; q++) {
            node& A = get_node(i, 2015, q);
            node& B = get_node(i, 2014, q);
            node& C = get_node(i, 2013, q);
            d = delta(A, B) * 100;
            //cout << "(" << A.income <<"," << d <<")";
            t_a += A.income;
            //s_a += A.income * A.profit_rate / 100;
            t_b += B.income;
            t_c += C.income;
            print1(out, A.income, d);
        }
        double d1 = (t_a-t_b)/t_b * 100;
        print1(out,t_a, d1);
        double d2 = (t_b-t_c)/t_c * 100;
        if (d2 > 0)
        fprintf(out,"<td>%(+%.1lf%%)</td>\n", d2);
        else
        fprintf(out,"<td>%(%.1lf%%)</td>\n",  d2);
        fprintf(out,"</tr>\n");
        if (d1>0&&d2>0) {
            Good.push_back(i);
            Pos[i].push_back("Income increase for 2 years.");
        }
        if (d1<0&&d2<0) {
            Bad.push_back(i);
            Neg[i].push_back("Income decline for 2 years.");
        }
    }
    fprintf(out, "</tbody>\n");
//    fprintf(out, "Good : ");
//    for (int i = 0; i < Good.size(); i++)
//        fprintf(out, "%d ", Good[i]);
//    fprintf(out, "\n");
//    fprintf(out, "Bad : ");
//    for (int i = 0; i < Bad.size(); i++)
//        fprintf(out, "%d ", Bad[i]);
//    fprintf(out, "\n");
    fclose(out);
}

void profit_rate(string filename) {
    FILE *out = fopen(filename.c_str(),"w");
    double ave[6] = {0};
    double std[6] = {0};
    double array[NID+5][6];
    for (int i = 1; i <= NID; i++) {
        double p = 0, q = 0;
        for (int j = 1; j <= 4; j++) {
            node &A = get_node(i, 2015, j);
            array[i][j] = A.profit_rate;
            ave[j] += array[i][j];
            p += A.income;
            q += A.income * A.profit_rate /  100;
        }
        array[i][5] = q / p * 100;
        ave[5] += q / p * 100;
    }
    for (int i = 1; i <= 5; i++)
    {
        ave[i] /= NID;
        for (int j = 1; j <= NID; j++)
            std[i] += (array[j][i] - ave[i]) * (array[j][i] - ave[i]);
        std[i] /= NID;
        std[i] = sqrt(std[i]);
    }
    fprintf(out, "<tbody>\n");
    for (int i = 1; i <= NID; i++) {
        fprintf(out, "<tr>\n");
        fprintf(out, "<td>%d</td>\n", i);
        int cnt1 = 0, cnt2 = 0;
        for (int j = 1; j <= 5; j++) {
            if (array[i][j] >= ave[j] + std[j]) {
                fprintf(out, "<td><span style=\"color:red;\">%.1lf%%</span></td>\n", array[i][j]);
                if (j == 5) cnt2 = 1;
            }
            else
            if (array[i][j] <= ave[j] - std[j]) {
                fprintf(out, "<td><span style=\"color:blue;\">%.1lf%%</span></td>\n", array[i][j]);
                if (j == 5) cnt2 = -1;
                    else cnt1 = -1;
            }
            else
                fprintf(out, "<td>%.1lf%%</td>\n", array[i][j]);
        }
        fprintf(out, "</tr>\n");
        if (cnt2 > 0)
            Pos[i].push_back("Pretty high profit rate.");
        else
        if (cnt2 < 0)
            Neg[i].push_back("Pretty low profit rate.");
        else
        if (cnt1 < 0)
            Neg[i].push_back("Low profit rate sometimes, may have problems.");
    }

    fprintf(out, "<tr>\n");
    fprintf(out, "<td>ave(std)</td>\n");
    for (int j = 1; j <= 5; j++)
        fprintf(out, "<td>%.1lf(%.1lf)</td>\n", ave[j], std[j]);
    fprintf(out, "</tr>\n");
    fprintf(out, "</tbody>\n");
    fclose(out);
}

void attendance(string filename) {
    FILE *out = fopen(filename.c_str(),"w");
    double ave[6] = {0};
    double std[6] = {0};
    double array[NID+5][6];
    for (int i = 1; i <= NID; i++) {
        double p = 0, q = 0;
        for (int j = 1; j <= 4; j++) {
            node &A = get_node(i, 2015, j);
            array[i][j] = A.attendance;
            ave[j] += array[i][j];
            p += A.income;
            q += A.income * A.attendance /  100;
        }
        array[i][5] = q / p * 100;
        ave[5] += q / p * 100;
    }
    for (int i = 1; i <= 5; i++)
    {
        ave[i] /= NID;
        for (int j = 1; j <= NID; j++)
            std[i] += (array[j][i] - ave[i]) * (array[j][i] - ave[i]);
        std[i] /= NID;
        std[i] = sqrt(std[i]);
    }
    fprintf(out, "<tbody>\n");
    for (int i = 1; i <= NID; i++) {
        fprintf(out, "<tr>\n");
        fprintf(out, "<td>%d</td>\n", i);
        int cnt1 = 0, cnt2 = 0;
        for (int j = 1; j <= 5; j++) {
            if (array[i][j] >= ave[j] + std[j]) {
                fprintf(out, "<td><span style=\"color:red;\">%.1lf%%</span></td>\n", array[i][j]);
                if (j == 5) cnt2 = 1;
            }
            else
            if (array[i][j] <= ave[j] - std[j]) {
                fprintf(out, "<td><span style=\"color:blue;\">%.1lf%%</span></td>\n", array[i][j]);
                if (j == 5) cnt2 = -1;
                    else cnt1 = -1;
            }
            else
                fprintf(out, "<td>%.1lf%%</td>\n", array[i][j]);
        }
        fprintf(out, "</tr>\n");
        if (cnt2 > 0)
            Pos[i].push_back("Pretty high attendance.");
        else
        if (cnt2 < 0)
            Neg[i].push_back("Pretty low attendance.");
        else
        if (cnt1 < 0)
            Neg[i].push_back("Low attendance sometimes, may have problems.");
    }

    fprintf(out, "<tr>\n");
    fprintf(out, "<td>ave(std)</td>\n");
    for (int j = 1; j <= 5; j++)
        fprintf(out, "<td>%.1lf(%.1lf)</td>\n", ave[j], std[j]);
    fprintf(out, "</tr>\n");
    fprintf(out, "</tbody>\n");
    fclose(out);
}


int main() {
    Pos.resize(NID+5);
    Neg.resize(NID+5);
    CSV A("files/CINEMA_DATA.csv");
    for (int i = 0; i < A.n; i++) {
        int id = atoi(A.get_data(i, 0));
        int y = atoi(A.get_data(i, 1));
        int q = atoi(A.get_data(i, 2));
        int a = atoi(A.get_data(i, 3));
        double b = atof(A.get_data(i, 4));
        double c = atof(A.get_data(i, 5));
        insert(id,y,q,node(a,b,c));
    }
    income("income.txt");
    profit_rate("profit_rate.txt");
    attendance("attendance.txt");

    FILE *out = fopen("summary.txt", "w");
    fprintf(out, "<p>\n");
    for (int i = 1; i <= NID; i++) {
        fprintf(out, "<b>#%d, %s</b> <br/>", i, cinema_name[i].c_str());
        //cout << i << endl;
        //cout << "Pos:" << endl;
        fprintf(out, "<div class=\"row\">\n");
        fprintf(out, "<div class=\"col-md-4\">\n");
        fprintf(out, "<span style=\"color:red;\">Positive</span>\n");
        fprintf(out, "</div>\n");
        fprintf(out, "<div class=\"col-md-8\">\n");
        for (int j = 0; j < Pos[i].size(); j++) {
            fprintf(out, "%s<br/>\n", Pos[i][j].c_str());
        }
        if (Pos[i].size() == 0)
            fprintf(out, "Nothing\n");
        fprintf(out, " </div></div><br/>");
        fprintf(out, "<div class=\"row\">\n");
        fprintf(out, "<div class=\"col-md-4\">\n");
        fprintf(out, "<span style=\"color:red;\">Negative</span>\n");
        fprintf(out, "</div>\n");
        fprintf(out, "<div class=\"col-md-8\">\n");
        for (int j = 0; j < Neg[i].size(); j++) {
            fprintf(out, "%s<br/>\n", Neg[i][j].c_str());
        }
        if (Neg[i].size() == 0)
            fprintf(out, "Nothing\n");
        fprintf(out, " </div></div><br/>");
    }
    fprintf(out, "</p>\n");
    fclose(out);
}

