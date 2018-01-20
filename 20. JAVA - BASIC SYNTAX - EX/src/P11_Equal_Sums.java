import java.util.Arrays;
import java.util.Locale;
import java.util.Scanner;

public class P11_Equal_Sums {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);

        int[] arr = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int bestNum = 0;
        Boolean hasMatch = false;
        for (int i = 0; i < arr.length; i++)
        {
            int leftsum = SumLeft(i, arr);
            int rightsum = SumRight(i, arr);
            if (leftsum == rightsum)
            {
                bestNum = i;
                hasMatch = true;
                break;
            }
        }
        if (hasMatch)
        {
            System.out.println(bestNum);
        }
        else {
            System.out.println("no");
        }
    }

    static int SumRight(int num, int[] arr)
    {
        int sumResultRight = 0;
        for (int i = num + 1; i < arr.length; i++)
        {
            sumResultRight += arr[i];
        }
        return sumResultRight;
    }

    static int SumLeft(int num, int[] arr)
    {
        int sumResultLeft = 0;
        for (int i = 0; i < num; i++)
        {
            sumResultLeft += arr[i];
        }
        return sumResultLeft;
    }
}
