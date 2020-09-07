#include <stdio.h>

int main() {
	
	int input;
	
	scanf("%d", &input);
	
	for(int i = 1;i <= 12; i++){
		input++;
		if(input % 2 != 0){
			printf("%d\n", input);
		}	
	}
	
	return 0;
}
