#include <stdio.h>
#include <math.h>
#include <stdlib.h>
int main() {
	
	int X1 = 0, Y1 = 0, X2 = 0, Y2 = 0;
	
	scanf("%d %d %d %d", &X1, &Y1, &X2, &Y2);
	printf("%d\n", abs((X1 - X2)) + abs((Y1 - Y2)));
	return 0;
}
