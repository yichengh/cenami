#include <iostream>
#include <vector>
#include <cstdio>
#include <cstring>
#include <cstdlib>
#include <cmath>
#include "CSV.h"
using namespace std;

vector<string> date;

double calc(CSV &A, int i, int p1, int p2, int num) {
    double s1 = 0, s2 = 0;
    for (int j = i; j > i - num; j--) {
        s1 += atof(A.get_data(j,p1));
        double k = atof(A.get_data(j,p2));
        if (k < 0) k = 85;
        s2 += k;
    }
    s1 /= num;
    s2 /= num;
    s2 /= 100;
    return log(s1) * s2;
}

string up = "<img src=\"/images/up.jpg\" width=\"20\" height=\"20\"></td>";
string down = "<img src=\"/images/down.jpg\" width=\"20\" height=\"20\"></td>";

void print(double x, double &last_x) {
    if (last_x < 0) {
        printf("<td>%.1lf</td>\n", x * 100);
    } else
    if (x > last_x) {
        printf("<td>%.1lf%s</td>\n", x * 100, up.c_str());
    } else {
        printf("<td>%.1lf%s</td>\n", x * 100, down.c_str());
    }

    last_x = x;
}

int main() {
    CSV A("trends.csv");
    freopen("trends_output.txt", "w", stdout);
    //for (int i = 0; i < A.n; i++)
      //  for (int j = 0; j < A.m; j++)
        //    cout << A.get_data(i, j) << endl;
    int t = 0;

    double last_x = -1, last_y = -1, last_z = -1;
    for (int i = 2; i < A.n; i+=3) {
        //cout << A.get_data(i, 0) << endl;
        double x = calc(A, i, 1, 4, 3);
        double y = calc(A, i, 2, 5, 3);
        double z = calc(A, i, 3, 6, 3);
        double s = x + y + z;
        x /= s, y /= s, z /= s;
        cout << "<tr>" << endl;
        cout << "<th scope=\"row\">" << A.get_data(i, 0) << "1</th>" << endl;
        print(x, last_x);
        print(y, last_y);
        print(z, last_z);
        cout << "</tr>" << endl;
        //printf("%.1f, %.1f, %.1f\n", x * 100, y * 100, z * 100);
    }
}
