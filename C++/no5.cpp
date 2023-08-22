#include <iostream>

using namespace std;

int main() {
  
    string genap = "";
    string ganjil = "";

for (int bil = 1; bil <= 50; bil++) {
  if (bil % 2 == 0) {
    genap  += to_string(bil) + " ";
  } else {
    ganjil += to_string(bil) + " ";
  }
}

cout << "Bilangan ganjil: " << ganjil << endl;
cout << "Bilangan genap: " <<  genap; 


}