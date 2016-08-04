#include "CSV.h"

CSV::CSV(string filename) {
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
    }
    fclose(in);
}

const char* CSV::get_data(int i, int j) {
    return Data[i][j].c_str();
}

