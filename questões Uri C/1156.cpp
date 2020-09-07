#include <stdio.h>


int main() {
	
	float S = 1.0, ZUM = 3;
	
	
	for(int i = 2; i <= 10000; i*=2){
		S+= ZUM / i;
		ZUM += 2;
	}
	
	printf("%.2f\n", S);
	
	return 0;
}
