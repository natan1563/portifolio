#include <stdio.h>

int main(){
	
	int input;
	
	scanf("%d", &input);
	
	for(int i = 1; i <= input; i++){
		if(i %2 != 0 and input <= 1000){
			printf("%d\n", i);
		}
	}
	
	return 0;
}
