#include "DataTim.cpp"

using namespace std;

int main(int argc, char const *argv[])
{
    // Setter
    DataTim T_satu;
    T_satu.setTim("Persib Bandung");
    T_satu.setNegara("Indonesia");
    T_satu.setTahun(1933);
    T_satu.setPemain("Teja Paku Alam");

    // Constructor Input
    DataTim T_dua("FC Bayern Munchen", "Jerman", 1900, "Robert Lewandowski");

    // Print Tim Pertama
    cout <<"====================================" << endl;
    cout << "Tim Pertama    :" << endl;
    cout <<"====================================" << endl;
    T_satu.printData();
    
    // Print New Line
    cout << endl;

    // Print Tim Kedua
    cout <<"====================================" << endl;
    cout << "Tim Kedua      :" << endl;
    cout <<"====================================" << endl;
    T_dua.printData();

    return 0;
}
