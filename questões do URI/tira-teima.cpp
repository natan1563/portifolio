#include <iostream>

using namespace std;

int main() {
	
	int x, y;
	
	cin >> x >> y;
	
	if(x < 0 or y < 0 or x > 432 or y > 468){
		cout << "fora" << endl;
	}else{
		cout << "dentro" << endl;
	}
	
	return 0;
}
