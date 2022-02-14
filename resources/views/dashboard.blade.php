@extends ('layout')

@section('content')
<main>
    <article>
        <table>
            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th>EC</th>
                <th>Exam</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td rowspan="3">1</td>
                <td>Programme and Career Orientation</td>
                <td>2,5</td>
                <td>Assessment</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td>5</td>
                <td>Written</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td>5</td>
                <td>Case Study</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="2">2</td>
                <td>Object Oriented Programming</td>
                <td rowspan="2">10</td>
                <td>Case Study</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td>Project</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="4">3</td>
                <td>Framework Development 1</td>
                <td>5</td>
                <td>Case Study</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Framework Project 1</td>
                <td rowspan="3">7,5</td>
                <td>Project</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td>Assessment</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td>Report</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="3">4</td>
                <td>Framework Development 2</td>
                <td rowspan="3">10</td>
                <td>Portfolio</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td>Project</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td>Assessment</td>
                <td>-</td>
            </tr>
            <tr>
                <td>The Entire Year</td>
                <td></td>
                <td>12,5</td>
                <td>Portfolio</td>
                <td>-</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td>Personality 1</td>
                <td rowspan="2">2,5</td>
                <td></td>
                <td>-</td>
            </tr>
            <tr>
                <td>Personality 2</td>
                <td></td>
                <td>-</td>
            </tr>
        </table>

        <a href="https://hz.nl/" target="_blank"><img src="img/hz.png" style="position: fixed; width: 165px; height: 45px; left: 25px; top: 695px;" alt="HZ logo"></a>
    </article>
</main>
@endsection
