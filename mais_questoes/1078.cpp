#include <stdio.h>


int main() {
	int input = 0, count = 1, result = 0;
	
	scanf("%d", &input);
	
	for(count; count <= 10; count++){
		printf("%d x %d = %d\n", count, input, (count * input));
	}
	return 0;
}
