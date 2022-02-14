#include <string>
#include <iostream>

using namespace std;

// Kelas DataTim
class DataTim
{
    // Atribut Private
    private:
        string tim;
        string negara;
        int tahun;
        string pemain;

    // Atribut Public
    public:
        // Constructor
        DataTim()
        {
        
        }

        // Constructor Input
        DataTim(string tim, string negara, int tahun, string pemain)
        {
            this->tim = tim;
            this->negara = negara;
            this->tahun = tahun;
            this->pemain = pemain;
        }

        // Prosedur Setter
        void setTim(string tim)
        {
            this->tim = tim;
        }

        void setNegara(string negara)
        {
            this->negara = negara;
        }

        void setTahun(int tahun)
        {
            this->tahun = tahun;
        }

        void setPemain(string pemain)
        {
            this->pemain = pemain;
        }

        // Fungsi Getter
        string getTim()
        {
            return this->tim;
        }

        string getNegara()
        {
            return this->negara;
        }       

        int getTahun()
        {
            return this->tahun;
        }

        string getPemain()
        {
            return this->pemain;
        }

        // Destructor
        ~DataTim()
        {

        };

        // Prosedur Print Data
        void printData()
        {
            cout << "Tim            : " << this->getTim() << endl;
            cout << "Negara         : " << this->getNegara() << endl;
            cout << "Tahun Berdiri  : " << this->getTahun() << endl;
            cout << "Pemain         : " << this->getPemain() << endl;
        }
};