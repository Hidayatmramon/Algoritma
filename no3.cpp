#include <iostream>

using namespace std;

int main() {
  int jam, menit, detik;

  cout << "Masukkan jam: ";
  cin >> jam;
  cout << "Masukkan menit: ";
  cin >> menit;
  cout << "Masukkan detik: ";
  cin >> detik;

  int td = jam * 3600 + menit * 60 + detik;

  cout << "Total detik: " << td << endl;

  return 0;
}