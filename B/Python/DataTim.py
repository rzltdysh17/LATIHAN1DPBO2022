# Kelas DataTim
class DataTim():
    __tim = ""
    __negara = ""
    __tahun = 0
    __pemain = ""

    # Constructor
    def __init__(self, tim = "", negara = "", tahun = 0, pemain  = ""):
        self.__tim = tim
        self.__negara = negara
        self.__tahun = tahun
        self.__pemain = pemain

    # Setter
    def setTim(self, tim):
        self.__tim = tim

    def setNegara(self, negara):
        self.__negara = negara

    def setTahun(self, tahun):
        self.__tahun = tahun

    def setPemain(self, pemain):
        self.__pemain = pemain

    # Getter
    def getTim(self):
        return self.__tim
    
    def getNegara(self):
        return self.__negara
    
    def getTahun(self):
        return self.__tahun

    def getPemain(self):
        return self.__pemain

    # Print Data
    def printData(self):
        print("Tim              : " + str(self.__tim))
        print("Negara           : " + str(self.__negara))
        print("Tahun Berdiri    : " + str(self.__tahun))
        print("Pemain           : " + str(self.__pemain))