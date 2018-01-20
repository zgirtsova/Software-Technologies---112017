import java.util.Arrays;
import java.util.Locale;
import java.util.Scanner;

public class P22_Intersection_of_Circles {
    public static class Circle {
        private Point center;
        private double radius;

        public Point getCenter() {
            return center;
        }

        public void setCenter(Point center) {
            this.center = center;
        }

        public double getRadius() {
            return radius;
        }

        public void setRadius(double radius) {
            this.radius = radius;
        }
    }

    public static class Point {
        private double x;
        private double y;

        public double getX() { return x; }
        public void setx(double x) { this.x = x; }
        public double getY() { return y; }
        public void setY(double y) { this.y = y; }
    }

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        Circle c1 = ReadCircle();
        Circle c2 = ReadCircle();
        double d = CalcDistance(c1.center, c2.center);
        // distance between the circle centers

        if (d > (c1.radius + c2.radius)) {
            System.out.println("No");
        } else {
            System.out.println("Yes");
        }
    }

    public static Circle ReadCircle() {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        double[] input = Arrays
                .stream(scan.nextLine().split(" "))
                .mapToDouble(Double::parseDouble)
                .toArray();
        Circle c = new Circle();
        Point p = new Point();
        p.x = input[0];
        p.y = input[1];
        c.center = p;
        c.radius = input[2];

        return c;
    }

    static double CalcDistance(Point p1, Point p2) {
        double sideA = Math.abs(p1.x - p2.x);
        double sideB = Math.abs(p1.y - p2.y);
        double distance = Math.sqrt(sideA * sideA + sideB * sideB);

        return distance;
    }
}
