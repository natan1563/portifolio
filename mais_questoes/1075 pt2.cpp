#include <stdio.h>


int main() {
	
	int input;
	
	scanf("%d", &input);
	
	for(int i = 0; i < 10000; i++){
		if(i % input == 2){
			printf("%d\n", i);
		}
	}
	
	return 0;
}

