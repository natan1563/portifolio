#include <stdio.h>

int main() {
	
	int tom1, tom2, tom3, tom4, soma = 0;
	
	scanf("%d %d %d %d", &tom1, &tom2, &tom3, &tom4);
	
	soma = (tom1 + tom2 + tom3 + tom4) - 3;
	
	printf("%d\n", soma);
	
	return 0;
}
