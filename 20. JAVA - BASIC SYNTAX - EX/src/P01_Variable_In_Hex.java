import java.util.Locale;
import java.util.Scanner;

public class P01_Variable_In_Hex {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int number = Integer.parseInt(scan.nextLine(), 16);
        System.out.println(number);
    }
}
