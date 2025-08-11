<div class="mb-3">
    <label>No</label>
    <input type="text" name="no" value="{{ old('no', $site->no ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Nama Site</label>
    <input type="text" name="nama_site" value="{{ old('nama_site', $site->nama_site ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Core</label>
    <input type="text" name="core" value="{{ old('core', $site->core ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Status Penggunaan</label>
    <select name="status_penggunaan" class="form-control" required>
        <option value="active" {{ old('status_penggunaan', $site->status_penggunaan ?? '') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status_penggunaan', $site->status_penggunaan ?? '') == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
</div>
<div class="mb-3">
    <label>Status Core</label>
    <select name="status_core" class="form-control" required>
        <option value="OK" {{ old('status_core', $site->status_core ?? '') == 'OK' ? 'selected' : '' }}>OK</option>
        <option value="NOK" {{ old('status_core', $site->status_core ?? '') == 'NOK' ? 'selected' : '' }}>NOK</option>
    </select>
</div>
<div class="mb-3">
    <label>OTDR (m)</label>
    <input type="number" name="otdr_m" value="{{ old('otdr_m', $site->otdr_m ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Source Site</label>
    <input type="text" name="source_site" value="{{ old('source_site', $site->source_site ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Destination Site</label>
    <input type="text" name="destination_site" value="{{ old('destination_site', $site->destination_site ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Keterangan</label>
    <textarea name="keterangan" class="form-control">{{ old('keterangan', $site->keterangan ?? '') }}</textarea>
</div>
