#include <stdio.h>


int main(){
	
	int input = 0, count = 1, dale = 0;
	
	while(count <= 5){
		
		scanf("%d", &input);
		
		if(input % 2 == 0){
			dale++;
		}
		
		count++;
	}
	
	printf("%d valores pares\n", dale);
	return 0;
}
