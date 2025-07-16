<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نموذج تسجيل الطالب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #007bff, #28a745);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 15px;
        }
        .form-box {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 15px;
            max-width: 900px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
        .form-control:invalid {
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="form-box text-center">
        <h2 class="mb-4">نموذج تسجيل الطالب</h2>
        <form class="row g-3 needs-validation justify-content-center" novalidate method="POST">
            <div class="col-md-6">
                <label class="form-label">الاسم الكامل</label>
                <input type="text" class="form-control" name="name" required>
                <div class="invalid-feedback">أدخل الاسم.</div>
            </div>
            <div class="col-md-6">
                <label class="form-label">البريد الإلكتروني</label>
                <input type="text" class="form-control" name="email" required> <!-- Changed to text to allow flexibility -->
                <div class="invalid-feedback">أدخل بريد صحيح.</div>
            </div>
            <div class="col-md-4">
                <label class="form-label">العمر</label>
                <input type="text" class="form-control" name="age" required> <!-- Changed to text to allow letters -->
                <div class="invalid-feedback">أدخل العمر بشكل صحيح.</div>
            </div>
            <div class="col-md-4">
                <label class="form-label">الجنس</label>
                <select class="form-select" name="gender" required>
                    <option value="">...اختر</option>
                    <option>ذكر</option>
                    <option>أنثى</option>
                </select>
                <div class="invalid-feedback">اختر الجنس.</div>
            </div>
            <div class="col-md-4">
                <label class="form-label">الدرجة</label>
                <input type="text" class="form-control" name="grade" required> <!-- Changed to text to allow letters -->
                <div class="invalid-feedback">أدخل الدرجة من 0 إلى 100.</div>
            </div>
            <div class="col-md-12">
                <label class="form-label">ملاحظات</label>
                <textarea class="form-control" name="notes" rows="2"></textarea>
                <div class="invalid-feedback">اكتب رأيك هنا.</div>
            </div>
            <div class="col-md-12 d-flex justify-content-center gap-3">
                <button type="submit" name="submit" class="btn btn-success">إرسال البيانات</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentsModal">عرض الطلاب</button>
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $name = htmlspecialchars($_POST['name']);
            $grade = htmlspecialchars($_POST['grade']); // No type casting to int
            echo "<div class='alert alert-info mt-4'>تم تسجيل الطالب <strong>$name</strong> بنجاح بدرجة <strong>$grade</strong></div>";
        }
        ?>
    </div>

    <div class="modal fade" id="studentsModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title">قائمة الطلاب</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <table class="table text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>الاسم</th>
                                <th>الدرجة</th>
                                <th>التقدير</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $students = [
                                ["name" => "أحمد علي", "grade" => 90],
                                ["name" => "منى سمير", "grade" => 72],
                                ["name" => "كريم فؤاد", "grade" => 45],
                            ];
                            foreach ($students as $stu) {
                                $grade = $stu['grade'];
                                $remark = ($grade >= 85) ? 'امتياز' : (($grade >= 60) ? 'جيد' : 'راسب');
                                echo "<tr><td>{$stu['name']}</td><td>$grade</td><td>$remark</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.querySelector('.needs-validation');
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    </script>
</body>
</html>