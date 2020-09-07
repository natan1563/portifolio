#include <stdio.h>


int main() {
	
	int totalKm, distP, litropKm, valPed;
	
	scanf("%d %d\n%d %d", &totalKm, &distP, &litropKm, &valPed);
	
	printf("%d\n", (totalKm / distP) * valPed + (totalKm * litropKm));
	
	return 0;
}
