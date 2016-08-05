#include <iostream>
#include <vector>
#include <cstdio>
#include <cstring>
#include <cstdlib>
#include <cmath>
#include <ctime>
using namespace std;
const int NID = 10;
// miu = 0, sigma = 1
// X = X * V + E for N(E,V)
double gaussrand()
{
    static double V1, V2, S;
    static int phase = 0;
    double X;
    if ( phase == 0 ) {
        do {
            double U1 = (double)rand() / RAND_MAX;
            double U2 = (double)rand() / RAND_MAX;

            V1 = 2 * U1 - 1;
            V2 = 2 * U2 - 1;
            S = V1 * V1 + V2 * V2;
        } while(S >= 1 || S == 0);
        X = V1 * sqrt(-2 * log(S) / S);
    } else
        X = V2 * sqrt(-2 * log(S) / S);
    phase = 1 - phase;
    return X;
}

int main() {
    freopen("files/test.csv", "w", stdout);
    cout << "cinema_id,year,quarter,operating_income,profit_rate,attendance" << endl;
    int basic_income[NID];
    int basic_profit_rate[NID];
    int basic_attendance[NID];
    for (int i = 0; i < NID; i++) {
        basic_income[i] = gaussrand() * 300 + 1000;
        basic_profit_rate[i] = rand() % 10 + 10;
        basic_attendance[i] = rand() % 40 + 40;
    }
    for (int id = 0; id < NID; id++) {
        int income[4];
        double profit_rate[4];
        double attendance[4];
        for (int i = 0; i < 4; i++) {
            income[i] = max(300., gaussrand() * basic_income[id] / 4 + basic_income[id]);
            profit_rate[i] = max(1., gaussrand() * basic_profit_rate[id] / 4 + basic_profit_rate[id]);
            attendance[i] = max(5., gaussrand() * basic_attendance[id] / 4 + basic_attendance[id]);
        }
        for (int year = 2013; year <= 2015; year++)
            for (int i = 0; i < 4; i++) {
                int _income = income[i] * (1 + gaussrand() * 0.1);
                double _profit_rate = max(1., profit_rate[i] * (1 + gaussrand() * 0.1));
                double _attendance = max(1., attendance[i] * (1 + gaussrand() * 0.1));
                _attendance = min(_attendance, 95.);
                printf("%d,%d,%d,%d,%.2f,%.2f\n", id+1,year,i+1,_income, _profit_rate, _attendance);
                income[i] = _income;
                profit_rate[i] = _profit_rate;
                attendance[i] = _attendance;
            }
    }

}
