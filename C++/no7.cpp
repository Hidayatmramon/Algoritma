#include <iostream>

using namespace std;

int main() {
  
  int i, j, nilai[15][5], kehadiran[15];
  float rata2, max;
  int mtk, ing, ind, dpk, agama;

  for (i = 0; i < 15; i++) {
    cout << "Masukkan nilai mata pelajaran MTK siswa ke-" << i + 1 << ": ";
    cin >> mtk;
    nilai[i][0] = mtk;
    cout << "Masukkan nilai mata pelajaran ING siswa ke-" << i + 1 << ": ";
    cin >> ing;
    nilai[i][1] = ing;
    cout << "Masukkan nilai mata pelajaran IND siswa ke-" << i + 1 << ": ";
    cin >> ind;
    nilai[i][2] = ind;
    cout << "Masukkan nilai mata pelajaran DPK siswa ke-" << i + 1 << ": ";
    cin >> dpk;
    nilai[i][3] = dpk;
    cout << "Masukkan nilai mata pelajaran AGAMA siswa ke-" << i + 1 << ": ";
    cin >> agama;
    nilai[i][4] = agama;
    cout << "Masukkan kehadiran siswa ke-" << i + 1 << ": ";
    cin >> kehadiran[i];
  }


  max = 0;
  for (i = 0; i < 15; i++) {
    rata2 = 0;
    for (j = 0; j < 5; j++) {
      rata2 += nilai[i][j];
    }
    rata2 /= 5;
    if (rata2 > max && kehadiran[i] == 100) {
      max = rata2;
    }
  }


  if (max == 0) {
    cout << "Tidak ada juara kelas." << endl;
  } else {
    cout << "Juara kelas adalah siswa ke-" << (max - 1) + 1 << endl;
  }

  return 0;
}