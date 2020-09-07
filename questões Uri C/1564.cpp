#include <stdio.h>

int main() {
	
	int input;
	
	while(scanf("%d", &input) != EOF){	
		if(input != 0){
			printf("vai ter duas!\n");
		}else{
			printf("vai ter copa!\n");
		}
		
	}
	
	return 0;
}
