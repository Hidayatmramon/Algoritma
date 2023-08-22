#include <iostream>
using namespace std;

int main() {
  int bil1 = 1, bil2 = 2, bil3 = 3;


  int max = bil1;
  if (bil2 > max) {
    max = bil2;
  }
  if (bil3 > max) {
    max = bil3;
  }

  cout << "Bilangan max: " << max << endl;

  return 0;

}