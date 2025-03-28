# Terms
Repository (Repo) một cái kho thư mục dự án
Branch cành
Conflict
Local tất cả thứ trên máy tính
Remote dữ liệu trên server nào đó
Fork
# Commands
git init "sử dụng git"
git status "xem trạng thái dự án"
git add {file name} " lưu lại file đó
git add .  "lưu lại tất cả file"
git reset " clear terminal "
git commit -m "message" "ghi chú trước khi lưu"
git checkout {branch name} "trở về hiện tại"
git branch
git checkout -b {branch name}
git merge
git branch -d {branch name}
git push " đường hướng dẫn của repository"
git remote add origin {repo url}
git push origin {branch name}
git clone {repo url}
git fetch origin
git checkout -b {branch name} origin/{branch name}
git log " xem trạng thái khi commit"
git log --oneline " xem commit gọn hơn"

" quy trình làm" từ local lên githud
clear terminal
git add .
git commit -m 'new remote push'
cách 1. git push + đường dẫn + tên branch
cách 2. git remote add origin + đường dẫn
git push origin + tên của branch
" từ githud về local"
lấy đường hướng dẫn copy githud
tạo thư mục
mở terminal: cd kéo dô thư mục
git clone đường dẫn
ls "xem thư mục"
cd tên thư mục
code." mở trên vsc"