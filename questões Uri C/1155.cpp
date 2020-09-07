#include <stdio.h>


int main() {
	
	int div = 1;
	double count = 1, soma = 1;
	
	while(count <= 100){
		soma+= 1/div;
		div++;
		count++;
	}
	
	printf("%f\n", soma);
	return 0;
}
