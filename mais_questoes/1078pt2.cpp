#include <stdio.h>


int main() {
	
	int input = 0, count = 1;
	scanf("%d", &input);
	while(count <= 10){
		printf("%d x %d = %d\n", count, input, count*input);
		count++;
	}
	
	return 0;
}
