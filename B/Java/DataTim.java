// Kelas DataTim
class DataTim
{
    // Atribut Private
    private String tim;
    private String negara;
    private int tahun;
    private String pemain;
    
    // Constructor
    DataTim()
    {

    }

    // Constructor Input
    public DataTim(String tim, String negara, int tahun, String pemain)
    {
        this.tim = tim;
        this.negara = negara;
        this.tahun = tahun;
        this.pemain = pemain;
    }

    // Getter dan Setter Tim
    public String getTim() {
        return tim;
    }

    public void setTim(String tim) {
        this.tim = tim;
    }

    // Getter dan Setter Negara
    public String getNegara() {
        return negara;
    }

    public void setNegara(String negara) {
        this.negara = negara;
    }

    // Getter dan Setter Tahun
    public int getTahun() {
        return tahun;
    }

    public void setTahun(int tahun) {
        this.tahun = tahun;
    }

    // Getter dan Setter Pemain
    public String getPemain() {
        return pemain;
    }

    public void setPemain(String pemain) {
        this.pemain = pemain;
    }
    
    // Print Data
    public void printData()
    {
        System.out.println("Tim             : " + this.getTim());
        System.out.println("Negara          : " + this.getNegara());
        System.out.println("Tahun Berdiri   : " + this.getTahun());
        System.out.println("Pemain          : " + this.getPemain());
    }
}
