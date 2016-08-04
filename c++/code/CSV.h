#include <iostream>
#include <vector>
#include <cstdio>
#include <cstring>
using std::string;
using std::vector;
// parse from CSV file
// Save as a 2D matrix
class CSV {
public:
    int n, m;
    char reads[10000];
    vector< vector<string> > Data;
    CSV(string filename); // filename : input csv file
    const char* get_data(int i, int j);
};
