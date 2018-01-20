import java.util.Locale;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        Boolean tOrF = scan.nextBoolean();
        if (tOrF) {
            System.out.println("Yes");
        }
        else {
            System.out.println("No");
        }
    }
}
