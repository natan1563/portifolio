#include <iostream>

using namespace std;

int main() {
	
	int A, B, C;
	
	cin >> A >> B >> C;
	
	if((A > B and A < C) or (A < B and A > C)){
		cout << A << endl;
	}else if((B>A and B < C) or (B < A and B > C)){
		cout << B << endl;
	}else{
		cout << C << endl;
	}
	
	return 0;
}
