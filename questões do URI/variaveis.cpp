#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

int main() {
	
	int a;
	float b;
	char c;
	bool d;
	
	a = 5;
	b = 2.6;
	c = 'a';
	d = true; // true == 1 false == 0 
	
	printf("O valor de a eh: %d \n", a);
	printf("O valor de b eh: %.1f \n", b);
	printf("O valor de c eh: %c \n", c);
	printf("O valor de d eh: %d\n", d);
	
	scanf(" %d", &a);
	printf("O valor de a agora eh: %d\n", a);
	scanf(" %f", &b);
	printf("O valor de b agora eh: %.1f\n", b);
	scanf(" %c", &c);
	printf("O valor de c agora eh: %c\n", c);
	scanf(" %d", &d);
	printf("O valor de d agora eh: %d\n", d);
 	

	system("pause");

}
