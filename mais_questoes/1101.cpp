#include <stdio.h>

int main(){
	
	int input1 = 0, input2 = 0, soma = 0, M, N;
	scanf("%d %d", &input1, &input2);
	while(input1 >= 1 && input2 >= 1){
		
		if(input1 > input2){
			M = input1;
			N = input2;
		}else{
			M = input2;
			N = input1;
		}
				 			
			while(N <= M){
				soma+=N;
				printf("%d ", N);
				N++;
			}			
		
	printf("Sum=%d\n", soma);
	soma = 0;
	scanf("%d %d", &input1, &input2);
		
	}
	
	return 0;
}
