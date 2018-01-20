import java.util.Arrays;
import java.util.Locale;
import java.util.Scanner;

public class P08_Max_Seq_of_Incr_Els {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int[] arr = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();
        int startPos = 0;
        int length = 1;
        int bestPos = 0;
        int bestLen = 1;

        for (int i = 1; i < arr.length; i++)
        {
            if (arr[i] > arr[i - 1])
            {
                length++;
                if (length > bestLen)
                {
                    bestLen = length;
                    bestPos = startPos;
                }
            }
            else
            {
                if (length > bestLen)
                {
                    bestPos = startPos;
                    bestLen = length;
                    startPos = i;
                    length = 1;
                }
                else
                {
                    startPos = i;
                    length = 1;
                }
            }
        }
        if (length > bestLen)
        {
            bestLen = length;
        }
        for (int i = bestPos; i < bestPos + bestLen; i++)
        {
            System.out.print(arr[i] + " ");
        }
        System.out.println();
    }
}
