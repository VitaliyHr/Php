#include <time.h>
#include <stdlib.h>
#include <stdio.h>


int main(void){

    char * addr = getenv("REMOTE_ADDR");
    char * cook = getenv("HTTP_COOKIE");

    printf("<!DOCTYPE html>");
    printf("<html lang=\"en\">");
    printf("<head>");
    printf("<meta charset=\"UTF-8\">");
    printf("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">");
    printf("<title>Document</title>");
    printf("</head>");
    printf("<body>");
    printf("helo wtf");
    printf("</body>");
    printf("</html>");

    return 0;
}