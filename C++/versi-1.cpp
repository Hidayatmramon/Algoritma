#include <iostream>

using namespace std;

int main() {
  
  int bil;  

  cout << "Bilangan ganjil: ";
  for (bil = 1; bil <= 50; bil += 2) {
    cout << bil << " ";
  }
  cout << endl;

  cout << "Bilangan genap: ";
  for (bil = 2; bil <= 50; bil += 2) {
    cout << bil << " ";
  }
  cout << endl;

  return 0;
}