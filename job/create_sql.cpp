#include <iostream>
#include <vector>
#include <cstdio>
#include <cstring>
using namespace std;

struct CSV {
    int n, m;
    char reads[10000];
    vector< vector<string> > Data;
    CSV(string filename) {
        FILE *in = fopen(filename.c_str(), "r");
        fscanf(in, " %[^\n]", reads);
        int L = strlen(reads);
        m = 1;
        for (int i = 0; i < L; i++) {
            if (reads[i] == ',') m++;
        }
        //cout << m << endl;
        int t = 0;
        while (fscanf(in, " %[^\n]", reads) != EOF) {
           // cout << ++t << endl;
           // cout << reads << endl;
            vector<string> A;
            string tmp(reads);
            for (int i = 1; i < m; i++) {
                int k;
                if (tmp[0] != '\"')
                    k = tmp.find(",");
                else {
                    k = tmp.find("\"", 1);
                    k++;
                }
                //cout << k << ecndl;
                string t = tmp.substr(0, k);
                if (t[0] == '\"')
                    t = t.substr(1, t.size() - 2);
                A.push_back(t);

                tmp = tmp.substr(k + 1);
            }
            A.push_back(tmp);
            Data.push_back(A);
            n++;
//            for (int i = 0; i < A.size(); i++)
//                cout << A[i] << " ";
//            cout << endl;
        }
        fclose(in);
    }
    const char* get_data(int i, int j) {
        return Data[i][j].c_str();
    }
};

int main() {
    CSV A("CINEMA_MST.csv");
//    for (int i = 0; i < A.n; i++)
//        for (int j = 0; j < A.m; j++)
//            cout << A.get_data(i, j) << endl;

    CSV B("STAFF_MST.csv");
//    for (int i = 0; i < B.n; i++)
//        for (int j = 0; j < B.m; j++)
//            cout << B.get_data(i, j) << endl;
    FILE *out = fopen("insert.sql", "w");
    fprintf(out, "insert into theater values\n");
    for (int i = 0; i < A.n; i++) {
        fprintf(out, "(");
        fprintf(out, "%s,\"%s\",\"%s\",\"%s\", 1", A.get_data(i, 0),
               A.get_data(i, 1),A.get_data(i, 2),A.get_data(i, 3));
        if (i < A.n - 1) fprintf(out, "),\n");
        else fprintf(out, ");\n");
    }


    fprintf(out, "insert into staff values\n");
    for (int i = 0; i < B.n; i++) {
        fprintf(out, "(");
        fprintf(out, "%s,\"%s\",\"%s\",\"%s\",\"%s\",%s",
            B.get_data(i, 0), B.get_data(i, 1),
            B.get_data(i, 2),B.get_data(i, 3),
            B.get_data(i, 4),B.get_data(i, 5));
        if (i < B.n - 1) fprintf(out, "),\n");
        else fprintf(out, ");\n");
    }
    fclose(out);
}
