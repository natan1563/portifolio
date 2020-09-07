#include <stdio.h>

int main(){
	int input = 0, value1 = 0, value2 = 0, rafael = 0, beto = 0, carlos = 0, count = 0;
	
	scanf("%d", &input);
	
	while(count < input){
		scanf("%d %d", &value1, &value2);
		
		rafael = ((3*value1)*(3*value1)) + (value2 * value2);
		beto = (2*(value1 * value1)) + ((5 * value2)*(5*value2));
		carlos = -100 * value1 + value2 * value2 * value2;
		
		if(rafael > beto && rafael > carlos){
			printf("Rafael ganhou\n");
		}else if(beto > rafael && beto > carlos){
			printf("Beto ganhou\n");
		}else{
			printf("Carlos ganhou\n");
		}
		
		count++;
	}
	return 0;
}
