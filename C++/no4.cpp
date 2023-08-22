#include <iostream>

using namespace std;

int main() {
  int td;

  cout << "Masukkan total detik: ";
  cin >> td;

  int jam = td / 3600;
  int menit = (td % 3600) / 60; 
  int detik = td % 60;

  cout << "Jam: " << jam << endl;
  cout << "Menit: " << menit << endl;
  cout << "Detik: " << detik << endl;

  return 0;
}