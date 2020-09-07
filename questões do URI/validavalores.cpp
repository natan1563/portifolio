#include <stdio.h>



int main() {
	
	int a, b, c, d;
	
	scanf("%d %d %d %d", &a, &b, &c, &d);
	
	if((b > c) and (d > a) and ((c+d)>(a+b)) and ((c && d) > 0) and (a % 2) == 0){
		printf("Valores aceitos\n");
	}else{
		printf("Valores nao aceitos\n");
	}
	
	return 0;
}
