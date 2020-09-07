#include <stdio.h>

int main() {
	
	int input;
	
	scanf("%d", &input);
	
	if(input <= 800){
		printf("1\n");
	}else if(input > 800 and input <= 1400){
		printf("2\n");
	}else if(input > 1400 and input <= 2000){
		printf("3\n");
	}
	return 0;
}
