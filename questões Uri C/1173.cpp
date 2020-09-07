#include <stdio.h>

int main() {
	
	int N[10], input, aux = 2;
	
	scanf("%d", &input);
	for(int i = 0; i < 10; i++){
		if(input < 2){
			N[i] = input;
		}else{
			N[i] = input;
		}
		
		input = input * aux;
		
		printf("N[%d] = %d\n", i, N[i]);
		
	}
	return 0;
}
