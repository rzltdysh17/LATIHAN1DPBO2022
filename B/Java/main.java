class main
{
    public static void main(String[] args)
    {    
        // Setter
        DataTim T_satu = new DataTim();
        T_satu.setTim("Persib Bandung");
        T_satu.setNegara("Indonesia");
        T_satu.setTahun(1933);
        T_satu.setPemain("Teja Paku Alam");

        // Constructor Input
        DataTim T_dua = new DataTim("FC Bayern Munchen", "Jerman", 1900, "Robert Lewandowski");

        // Print Tim Pertama
        System.out.println("====================================");
        System.out.println("Tim Pertama    :");
        System.out.println("====================================");
        T_satu.printData();
        
        // Print New Line
        System.out.println();

        // Print Tim Kedua
        System.out.println("====================================");
        System.out.println("Tim Kedua      :");
        System.out.println("====================================");
        T_dua.printData();

    }
}
