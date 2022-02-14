from DataTim import DataTim

# Setter
T_satu = DataTim()
T_satu.setTim("Persib Bandung")
T_satu.setNegara("Indonesia")
T_satu.setTahun(1933)
T_satu.setPemain("Teja Paku Alam")

# Constructor Input
T_dua = DataTim("FC Bayern Munchen", "Jerman", 1900, "Robert Lewandowski")

# Print Tim Pertama
print("====================================")
print("Tim Pertama      :")
print("====================================")
T_satu.printData()

# Print New Line
print("")

# Print Tim Kedua
print("====================================")
print("Tim Kedua        :")
print("====================================")
T_dua.printData()