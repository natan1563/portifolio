#include <stdio.h>

int main() {
	
	int input;
	
	scanf("%d", &input);
	
	if(input == 0){
		printf("E\n");
	}else if(input >= 1 and input<= 35){
		printf("D\n");
	}else if(input >= 36 and input<= 60){
		printf("C\n");
	}else if(input >= 61 and input<= 85){
		printf("B\n");
	}else if(input >= 86 and input<= 100){
		printf("A\n");
	}
	
	return 0;
}
