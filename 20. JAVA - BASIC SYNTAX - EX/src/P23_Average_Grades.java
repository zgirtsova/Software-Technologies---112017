import java.math.BigDecimal;
import java.util.*;
import java.util.stream.Collectors;

public class P23_Average_Grades {

    public static class Student {
        private String name;
        private List<Double> grades;
        private double avgGrade;

        public String getName() {
            return name;
        }

        public void setName(String name) {
            this.name = name;
        }

        public List<Double> getGrades() {
            return grades;
        }

        public void setGrades(List<Double> grades) {
            this.grades = grades;
        }

        public double getAvgGrade() {
            return avgGrade;
        }

        public void setAvgGrade(List<Double> grades) {
            DoubleSummaryStatistics stats = grades.stream()
                    .mapToDouble((x) -> x)
                    .summaryStatistics();
            this.avgGrade = stats.getAverage();
        }
    }

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int n = Integer.parseInt(scan.nextLine());
        List<Student> students = new ArrayList<>();

        for (int i = 0; i < n; i++) {
            Student st = readStudent(scan.nextLine());
            students.add(st);
        }

        students = students.stream()
                .filter(x -> x.avgGrade >= 5.00)
                .collect(Collectors.toList());

        students
                .sort(Comparator.comparing(Student::getName).reversed()
                .thenComparingDouble(Student::getAvgGrade).reversed());

        for (Student s : students) {
            System.out.printf("%s -> %.2f%n", s.name, s.avgGrade);
        }

    }

    private static Student readStudent(String s) {

        double[] arr = Arrays
                .stream(s.split(" "))
                .skip(1)
                .mapToDouble(Double::parseDouble)
                .toArray();

        String name = s.split(" ")[0];

        List<Double> gr = new ArrayList<>();
        for (double a : arr) {
            gr.add(a);
        }

        DoubleSummaryStatistics stats = gr.stream()
                .mapToDouble((x) -> x)
                .summaryStatistics();

        Student st = new Student();
        st.name = name;
        st.grades = gr;
        st.avgGrade = stats.getAverage();

        return st;
    }
}
