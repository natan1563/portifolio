#include <stdio.h>
#include <stdlib.h>


int main(){
	float a, b, c, calc;
	
	scanf("%f %f %f", &a, &b, &c);
	
	if(((abs(b - c) < a) && (a < b + c)) && ((abs(a - c) < b) && (b < a + c)) && ((abs(a - b) < c) && (c < a + b))){
		printf("Perimetro = %.1f\n", calc = a + b + c);
	}else{
		printf("Area = %.1f\n", calc = ((a + b) * c)/2);
	}
	
	return 0;
}
