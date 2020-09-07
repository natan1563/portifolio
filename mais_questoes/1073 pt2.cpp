#include <stdio.h>


int main() {
	
	int input;
	scanf("%d", &input);
	
	for(int i = 1; i <= input; i++){
		
		if(i % 2 == 0){
			printf("%d^2 = %d\n", i, i*i);
		}
	}
	
	return 0;
}
