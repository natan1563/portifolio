#include <stdio.h>

int main() {
	
	int breaker, number, in = 0, out = 0, count;
	
	scanf("%d", &breaker);
	
	while(count < breaker){
		scanf("%d", &number);
		
		if(number <= 10 && number <= 20){
			in++;
		}else{
			out++;
		}
		
		count++;
	}
	
	printf("%d in\n%d out\n", in, out);
	
	return 0;
}
