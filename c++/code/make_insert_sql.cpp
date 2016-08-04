#include <iostream>
#include <vector>
#include <cstdio>
#include <cstring>
#include "CSV.h"
using namespace std;

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
