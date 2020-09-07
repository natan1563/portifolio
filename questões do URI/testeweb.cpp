  
#include <stdio.h>

int main() {
    
    int seg1, min1, hor1, dia1;
    int seg2, min2, hor2, dia2;

    scanf("Dia %d\n", &dia1);
    scanf("%d : %d : %d\n", &hor1, &min1, &seg1);
    scanf("Dia %d\n", &dia2);
    scanf("%d : %d : %d", &hor2, &min2, &seg2);    

	seg1 = seg2 - seg1;
	min1 = min2 - min1;
	hor1 = hor2 - hor1;
	dia1 = dia2 - dia1;

    if (seg1 < 0){
    	seg1 += 60;
    	min1--;    	
    }

    if (min1 < 0){
    	min1 += 60;
    	hor1--;    	
    }    

    if (hor1 < 0){
    	hor1 += 24;
    	dia1--;
    }

    printf("%d dia(s)\n", dia1);
    printf("%d hora(s)\n", hor1);
    printf("%d minuto(s)\n", min1);
    printf("%d segundo(s)\n", seg1);
    
    return 0;
}
