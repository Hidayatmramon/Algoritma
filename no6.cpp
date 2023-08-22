#include <iostream>

using namespace std;

int main() {

  int nilai[10], max = 0, jumlah = 0;

  
  for (int i = 0; i < 10; i++) {
    cout << "Masukkan nilai ujian siswa ke-" << i + 1 << ": ";
    cin >> nilai[i];

    if (nilai[i] > max) {
      max = nilai[i];
      jumlah = 1;
    } else if (nilai[i] == max) {
      jumlah++;
    }
  }

 
  cout << "Nilai max: " << max << endl;
  cout << "Jumlah siswa dengan nilai max: " << jumlah << endl;

  return 0;
}